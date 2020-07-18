// $(document).ready(function () {
//   $('#create_excel').click(function () {
//     var excel_data = $('#employee_table').html()
//     console.log('excel_data', excel_data)
//     var page = 'excel.php?data=' + excel_data
//     console.log('page:', page)
//     window.location = page
//   })
// })

// $(function () {
//   $('#create_excel').click(function () {
//     $('#mytable').table2excel({
//       exclude: '.noExl',
//       name: 'Excel Document Name',
//       filename: 'report',
//       fileext: '.xls',
//       exclude_img: true,
//       exclude_links: true,
//       exclude_inputs: true,
//     })
//   })
// })

// $('#create_pdf').on('click', function () {
//   window.location.href = 'generatePdf.php'
// })

//Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
