'use strict';

$(document).ready(function () {
    let tableName = '#subscriptionTransactionsTable';
    let tbl = $(tableName).DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        'language': {
            'lengthMenu': 'Show _MENU_',
        },
        'order': [[2, 'desc']],
        ajax: {
            url: subscriptionTransactionUrl,
            data: function (data) {
                data.payment_type = $('#paymentTypeArr').
                    find('option:selected').
                    val();
            },
        },
        columnDefs: [
            {
                'targets': [0],
                'orderable': true,
            },
            {
                'targets': [1, 2],
                'className': 'text-center align-middle text-nowrap',
                'orderable': true,
            },
            {
                'targets': [3],
                'className': 'text-center align-middle text-nowrap',
                'orderable': true,
            },
            {
                'targets': [4],
                'className': 'text-center align-middle text-nowrap',
                'orderable': true,
            },
            {
                targets: '_all',
                defaultContent: 'N/A',
                'className': 'text-start align-middle text-nowrap',
            },
        ],
        columns: [
            {
                data: function (row) {
                    return row.user.full_name;
                },
                name: 'first_name',
            },
            {
                data: function (row) {
                    return `<a data-id="${row.payment_type}" class="badge badge-light-primary">${row.payment_type ==
                    1 ? stripe : paypal}</a>`;
                },
                name: 'payment_type',
            },
            {
                data: function (row) {
                    return '<p class="mb-0">' + row.plan_currency_symbol + ' ' +
                        addCommas(row.amount) + '</p>';
                },
                name: 'amount',
            },
            {
                data: function (row) {
                    return `<div class="badge badge-light">
                                <div class="mb-2">${moment(row.created_at).
                        format('LT')}</div>
                                <div>${moment(row.created_at).
                        format('Do MMM, Y')}</div>
                            </div>`;
                },
                name: 'created_at',
            },
            {
                data: function (row) {
                    if (row.status == 1) {
                        return `<span class="badge badge-light-success">${paid}</span>`;
                    }
                },
                name: 'status',
            },
        ],
        'fnInitComplete': function () {
            $(document).on('change', '#paymentTypeArr', function () {
                $(tableName).DataTable().ajax.reload(null, true);
            });
        },
    });
    handleSearchDatatable(tbl);
});

$(document).on('click', '#resetFilter', function () {
    $('#paymentTypeArr').val('').trigger('change');
});
