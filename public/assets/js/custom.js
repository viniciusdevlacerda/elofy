$(document).ready(function() {

    $('#tablePeople').DataTable({
        'dom': 'lrtip',
        'columnDefs': [
           {
               'targets': 0,
               'checkboxes': true
           }
       ],
        'order': [[1, 'asc']]
    });
    $('.dataTables_filter').find('input').addClass('form-control rounded-50');
    $('.dataTables_filter').find('input').attr('placeholder','Pesquisar por: Nome, Altura, Peso...');
});
