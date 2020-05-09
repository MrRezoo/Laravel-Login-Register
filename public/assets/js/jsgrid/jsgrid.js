(function($) {
    "use strict";
    $("#basicScenario").jsGrid({
        width: "100%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 15,
        pageButtonCount: 5,
        deleteConfirm: "آیا واقعا می خواهید مشتری را حذف کنید؟",
        controller: db,
        fields: [
        { name: "نام", type: "text", width: 150 },
        { name: "سن", type: "number", width: 50 },
        { name: "آدرس", type: "text", width: 200 },
        { name: "کشور", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
        { name: "متاهل", type: "checkbox", title: "متاهل است", sorting: false },
        { type: "control" }
        ]
    });
    $("#sorting-table").jsGrid({
        height:"400px",
        width: "100%",
        autoload: true,
        selecting: false,
        controller: db,
        fields: [
        { name: "نام", type: "text", width: 150 },
        { name: "سن", type: "number", width: 50 },
        { name: "آدرس", type: "text", width: 200 },
        { name: "کشور", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
        { name: "متاهل", type: "checkbox", title: "متاهل است" }
        ]
    });
    $("#sort").click ( function() {
        var field = $("#sortingField").val();
        $("#sorting-table").jsGrid("sort", field);
    });
    $("#batchDelete").jsGrid({
        width: "100%",
        autoload: true,
        confirmDeleting: false,
        paging: true,
        controller: {
            loadData: function() {
                return db.clients;
            }
        },
        fields: [
            {
                headerTemplate: function() {
                    return $("<button>").attr("type", "button").text("حذف") .addClass("btn btn-danger btn-sm btn-delete mb-0")
                        .click( function () {
                            deleteSelectedItems();
                        });
            },
            itemTemplate: function(_, item) {
                return $("<input>").attr("type", "checkbox")
                        .prop("checked", $.inArray(item, selectedItems) > -1)
                        .on("change", function () {
                            $(this).is(":checked") ? selectItem(item) : unselectItem(item);
                        });
            },
            align: "center",
            width: 50
            },
            { name: "نام", type: "text", width: 150 },
            { name: "سن", type: "number", width: 50 },
            { name: "آدرس", type: "text", width: 200 }
        ]
    });
    var selectedItems = [];
    var selectItem = function(item) {
        selectedItems.push(item);
    };
    var unselectItem = function(item) {
        selectedItems = $.grep(selectedItems, function(i) {
            return i !== item;
        });
    };
    var deleteSelectedItems = function() {
        if(!selectedItems.length || !confirm("مطمئن هستید؟"))
            return;
        deleteClientsFromDb(selectedItems);
        var $grid = $("#batchDelete");
        $grid.jsGrid("option", "pageIndex", 1);
        $grid.jsGrid("loadData");
        selectedItems = [];
    };
    var deleteClientsFromDb = function(deletingClients) {
        db.clients = $.map(db.clients, function(client) {
            return ($.inArray(client, deletingClients) > -1) ? null : client;
        });
    };
})(jQuery);