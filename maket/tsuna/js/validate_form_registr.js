<!--
			function validate_form_registr ( )
			{
				valid = true;

					if ( document.registration_form.subName.value == "" )
					{
							alert ( "Пожалуйста, введите вашу фамилию." );
							valid = false;
					}

					
					if ( document.registration_form.myName.value == "" )
					{
							alert ( "Вы забыли ввести имя" );
							valid = false;
					}
					 
					
					if ( document.registration_form.password1.value == "" )
					{
							alert ( "Поле с паролем не может быть пустым" );
							valid = false;
					}
					
					if ( document.registration_form.password_repl.value == "" )
					{
							alert ( "Подтвердите, пожалуйста, ваш пароль" );
							valid = false;
					} 
				
					if (document.registration_form.password1.value.length < 4)  {
					alert ("Пароль не может состоять менее, чем из 4х символов");
						valid = false;
					 }
           
					if (document.registration_form.password1.value != document.registration_form.password_repl.value)  {
                    alert('Пароли не совпадают');
                    valid = false;
					}
					
					if(! (/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/.test(registration_form.Email.value))){
					alert("Ошибка в E-mail!");
					registration_form.Email.focus();
					return false;
					};			
			
					
					
					return valid;
			}
	//-->

		

	