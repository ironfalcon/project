/*$(document).ready(function() { 
    $("#contact-form").ajaxForm(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "MailHandler.php", //путь до php фаила отправителя
            data: form_data,
            success: function(data) {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!" + form_data + " Q "+data);
                 }
            });
    }); 
  });

*/


$(document).ready(function(){
  var fd;
  $("#contact-form").submit(function(){
  fd=$(this).serialize();
  });
    $("#contact-form").ajaxForm(function() {
 // fd=$(this).serialize(); //устанавливаем событие отправки для формы с id=form
           // var form_data=fd; //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "MailHandler.php", //путь до php фаила отправителя
            data: fd,
            success: function(data) {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   if(data=="success")
                   {
                      $("#mailValid").addClass("alert-success");
                      $("#mailValid").text("Сообщение успешно отправлено, ождиайте звонка");

                   }
                   else{
                      $("#mailValid").addClass("alert-danger");
                      $("#mailValid").text("Сообщение не было отправлено, проверьте введенные данные и попробуйте снова");
                    }
            }
            });
    });
}); 

