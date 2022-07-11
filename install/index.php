<?php require_once 'install.php';?>
<!doctype html>
<html lang="ru">

    <head>
    
        <meta charset="utf-8">
        <title>Установка | Cube Money</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <!-- App Css-->
        <link href="css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

		

    </head>

    <body data-sidebar="dark">
        <audio src="" autoplay="autoplay"></audio>
        <div id="layout-wrapper">

                <div style="margin:30px calc(1.5rem / 2) 0px calc(1.5rem / 2);">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
									
										<div class="row" style="justify-content:flex-start;">
											<div>
												<a href="#" class="logo logo-dark">
													<span class="logo-sm">
														<img src="../upload/logoinstall.png" alt="" height="22">
													</span>
													<span class="logo-lg">
														<img src="../upload/logoinstall.png" alt="" height="17">
													</span>
												</a>

												<a href="#" class="logo logo-light">
													<span class="logo-sm">
														<img src="../upload/logoinstall.png" alt="" height="22">
													</span>
													<span class="logo-lg">
														<img src="../upload/logoinstall.png" alt="" height="44">
													</span>
												</a>
											</div>
											
										</div>
										
                                        <div class="row">
											<span class="d-md-none d-block">Установка "Cube Money"</span>.
											<span class="d-none d-md-block">Установка "Cube Money" - система учета доходов и расходов</span>.
										</div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 1){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">Информация</span><span class="d-block d-md-none"><i class="mdi mdi-information-outline h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 2){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">База данных</span><span class="d-block d-md-none"><i class="mdi mdi-database-cog h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 3){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">Администрирование</span><span class="d-block d-md-none"><i class="mdi mdi-account-cog h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 4){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">Завершение</span><span class="d-block d-md-none"><i class="mdi mdi-thumb-up h5"></i></span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
											<? if($step == 1){ ?>
												<div class="<? if($step == 1){ ?>active<? } ?> p-3">
													<p class="mb-3">
														Cube Money — система для ведения и контроля финансов как личного, семейного бюджета, так и вести финансовый учет индивидуальным предпринимателям и фрилансерам. <br>
														Cube Money позволит создать эффективный финансовый план, запланировать бюджет рассчитать доходы и расходы, назначить цели и контролировать их достижение.
													</p>
													<div class="row">
														<div class="col-lg-6">
															<p class="mb-3">
																Рекомендуемая версия PHP носит лишь рекомендательный характер. Cube Money 
																работает на версиях от 7.0 до 7.1 версий. 
															</p>
															<p class="mb-3">
																Какую версию PHP лучше всего использовать? Конечно же, самую актуальную 
																на данный момент. Тогда вы всегда будете получать:
																
																<ul>
																	<li>потенциал для роста производительности сайта;</li>
																	<li>надёжную защиту от вредоносных атак, использующих уязвимости в PHP;</li>
																	<li>самый широких выбор ПО и плагинов, совместимых с сайтом.</li>
																</ul>
																
																
																
															</p>
														</div>
													
														<div class="col-lg-6">
															
															<span class=""><strong>Рекомендуемая версия PHP -</strong> 7.1</span>
															
															<p class="mb-3">
																<span class="" style="color:<?php if($phpversion > 7.3 && $phpversion < 7.5){ ?>#02a499<?php } elseif($phpversion < 5.6 || $phpversion > 7.4){ ?>#ec4561<?php } else {?>#f8b425<?php } ?>;"><strong>Текущая версия PHP -</strong> <?php echo $phpversion; ?></span>
															</p>
															<p class="mb-3">
																<strong>Дополнительные рекомендации сервера</strong>
															</p>
															<p class="mb-3">
																<ul>
																	<li>MySQL версии 5.6 или выше;</li>
																	<li>Расширение PDO PHP</li>
																	<li>Расширение ZipArchive PHP</li>
																	<li>Расширение OpenSSL</li>
																	<li>Расширение Mcrypt</li>
																</ul>
															</p>
														</div>
													</div>
													<div class="row align-items-center mt-3">
																<div class="col-md-12">
																	
																	<div class="float-end">
																		<a href="/install/?step=2" class="btn btn-primary <?php if($phpversion < 5.6 || $phpversion > 7.5){ ?>disabled<?php } ?>" type="button">
																			<i class="fas fa-angle-right me-2"></i> Далее
																		</a>
																	</div>

																</div>
															</div>
												</div>
												
											<? } elseif($step == 2){ ?>
												<div class="<? if($step == 2){ ?>active<? } ?> p-3">
													
													
													<form method="POST">
														<div class="row">
															<div class="col-lg-6">
																<div class="row mb-3">
																	<label for="nameSERVER" class="col-sm-4 col-form-label">Сервер базы данных</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="По-умолчанию, localhost" id="nameSERVER" value="<?= $nameSERVER; ?>" name="nameSERVER">
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="namePort" class="col-sm-4 col-form-label">Порт</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="По-умолчанию, 3306" id="namePort" value="3306" name="namePort" disabled>
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="nameCharset" class="col-sm-4 col-form-label">Кодировка</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="Например, utf8" id="nameCharset" value="<?= $nameCharset; ?>" name="nameCharset">
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="nameDB" class="col-sm-4 col-form-label">Имя базы данных</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="nameDB" value="<?= $nameDB; ?>" name="nameDB">
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="nameUSER" class="col-sm-4 col-form-label">Имя пользователя</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="nameUSER" value="<?= $nameUSER; ?>" name="nameUSER">
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="passUSER" class="col-sm-4 col-form-label">Пароль</label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="passUSER" value="<?= $passUSER; ?>" name="passUSER">
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																<p class="mb-3">
																	База данных — это специально созданное хранилище важной информации, 
																	неотъемлемым атрибутом которого является удобный доступ ко всем 
																	хранящимся данным.
																</p>
																<p class="mb-3">
																	<strong>Преимущества MySQL</strong>
																</p>
																<p class="mb-3">
																<ul>
																	<li>Безопасность. Система изначально создана таким образом, 
																	что множество встроенных функций безопасности в ней работают по 
																	умолчанию;</li>
																	<li>Масштабируемость. Являясь весьма универсальной СУБД, MySQL в равной 
																	степени легко может быть использована для работы и с малыми, и с большими 
																	объемами данных</li>
																	<li>Скорость. Высокая производительность системы обеспечивается за счет 
																	упрощения некоторых используемых в ней стандартов</li>
																</ul>
															</p>
															</div>
														
															<div class="row align-items-center mt-3">
																<div class="col-md-12">
																	
																	<div class="float-end" id="div_db">
																		<button id="btn_db" class="btn btn-primary" type="submit">
																			Проверить соединение
																		</button>
																	</div>
																	<div class="float-end" style="margin-right:20px;">
																		<a href="/install/?step=1" class="btn btn-primary" type="button">
																			<i class="fas fa-angle-left me-2"></i> Назад
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
											<? } elseif($step == 3){ ?>
												<div class="<? if($step == 3){ ?>active<? } ?> p-3">
													<form method="POST">
														<div class="row">
															<div class="col-lg-6">
																
																<div class="row mb-3">
																	<label for="seotitle" class="col-sm-4 col-form-label">Название сайта <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input type="text" name="seotitle" class="form-control" id="seotitle" placeholder="Напишите название сайта" value="<?= $seotitle; ?>" required>
																		
																	</div>
																</div>
	
																<div class="row mb-3">
																	<label for="email" class="col-sm-4 col-form-label">Email администратора <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input class="form-control" type="email" placeholder="" id="email" value="<?= $email; ?>" name="email" required>
																	</div>
																</div>
																<div class="row mb-3" style="display:none;">
																	<label for="password" class="col-sm-4 col-form-label">Пароль администратора <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="password" value="12345" name="password" required>
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																
																<p class="mb-3">
																	<strong>Название сайта</strong> - используется в теге <span style="color:#ec4561;">title</span>
																</p>
																
																<p class="mb-3">
																	<strong>Email администратора</strong> - используется в качестве логина при входе в панель управления
																</p>
																
																<p class="mb-3">
																	Поля обозначенные <span style="color:#ec4561;">*</span> являются обязательными для заполнения
																</p>
															</div>
														
															<div class="row align-items-center mt-3">
																<div class="col-md-12">
																	
																	<div class="float-end" id="div_admin">
																		<button id="btn_admin" class="btn btn-primary" type="submit">
																			<i class="mdi mdi-atom-variant me-2"></i> Установить
																		</button>
																	</div>
																	<div class="float-end" style="margin-right:20px;">
																		<a href="/install/?step=2" class="btn btn-primary" type="button">
																			<i class="fas fa-angle-left me-2"></i> Назад
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
											<? } elseif($step == 4){ ?>
												<div class="<? if($step == 4){ ?>active<? } ?> p-3">
												

												

												
												
													<div class="row">
														<div class="col-lg-6">
															
																
																<p class="mb-3">
																	<strong>Email администратора:</strong>  <strong style="margin:0 10px;" id="email-copy"><?php echo $email[0]['email']; ?></strong>
																	<button onclick="copytext('#email-copy')" type="button" class="btn btn-light waves-effect">Копировать</button>
																</p>
																<p class="mb-3">
																	<strong>Пароль администратора:</strong>  <strong style="margin:0 10px;" id="password-copy"><?php echo $passwordAdmin; ?></strong>
																	<button onclick="copytext('#password-copy')" type="button" class="btn btn-light waves-effect">Копировать</button>
																</p>
																
																
															
														</div>
														<div class="col-lg-6">
															<p class="mb-3">
																<strong style="color:#02a499;">Поздравляем, ваш сайт успешно создан!</strong>
															</p>
															<p class="mb-3">
																Перейдите на сайт и авторизуйтесь, используя введенные ранее email и пароль администратора.
															</p>
															<p class="mb-3">
																При возникновении вопросов или пожеланий обратитесь в <a target="_blank" href="https://vk.com/webcreature">поддержку</a>.
															</p>
															<p class="mb-3">
																<strong style="color:#ec4561;">Внимание! После удаления папки INSTALL данная страница станет недоступной!</strong>
															</p>
															<p class="mb-0" id="deleteInstall">
																<strong style="color:#ec4561;">Удалите папку install из корневой директории сайта</strong>
																<a href="/install/?step=4&delete=1" style="margin:0 10px;" class="btn btn-danger waves-effect waves-light">Удалить</a>
															</p>
														</div>
														<div class="row align-items-center mt-3">
															<div class="col-md-12">
																<div class="float-end">
																	<a href="/" target="_blank" class="btn btn-primary" type="button">
																		<i class="mdi mdi-bank-transfer-in me-2"></i> Панель управления
																	</a>
																</div>
																<div class="float-end" style="margin-right:20px;">
																	<a href="/install/?step=3" class="btn btn-primary" type="button">
																		<i class="fas fa-angle-left me-2"></i> Назад
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											<? } ?>
                                        </div>

                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

        </div>
		<div id="copy"></div>

        <!-- JAVASCRIPT -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="libs/metismenu/metisMenu.min.js"></script>
        <script src="libs/simplebar/simplebar.min.js"></script>
        <script src="libs/node-waves/waves.min.js"></script>


        <script src="js/app.js"></script>
		
		<?php if(isset($connection) and $connection == 1){ ?>
			<script>
				document.getElementById("btn_db").style.display = "none";
				document.getElementById("div_db").innerHTML = "<a href='/install/?step=3' class='btn btn-success'><i class='fas fa-angle-right me-2'></i>  Далее</a>";
			</script>
		<?php } else {} ?>
		<?php if(isset($connection) and $connection == 2){ ?>
			<script>
				document.getElementById("btn_admin").style.display = "none";
				document.getElementById("div_admin").innerHTML = "<a href='/install/?step=4&password=<?php echo $passwordAdmin; ?>' class='btn btn-success'>Завершить</a>";
			</script>
		<?php } else {} ?>
		
		
		
		
		
		<?php if(isset($sound) and $sound == 'success-db'){ ?>
			<script>
				var audio = new Audio();
				audio.src = 'sound/success-db.mp3';
				audio.autoplay = true;
			</script>
		<?php } ?>
		<?php if(isset($sound) and $sound == 'error-db') { ?>
			<script>
				var audio = new Audio();
				audio.src = 'sound/error-bd.mp3';
				audio.autoplay = true;
			</script>
		<?php } ?>
		<?php if(isset($sound) and $sound == 'success-adm') { 
		
		$message = "
		   <div id='successAdm' class='alert alert-success mb-0' role='alert'>
				<strong>Поздравляем!</strong> Установка завершена!
			</div>
			<script>setTimeout(() => {  document.getElementById('successAdm').classList.add('hidden'); }, 3000); </script>
		   ";

		?>
			<script>
				var audio = new Audio();
				audio.src = 'sound/success-adm.mp3';
				audio.autoplay = true;
			</script>

		<?php } ?>
		<?php if($_GET['step'] == 4 and $_GET['delete'] != 1) { 
		
		$message = "
		   <div id='deleteAdm' class='alert alert-warning mb-0' role='alert'>
					<strong>Внимание!</strong> Не забудьте удалить папку INSTALL.
			</div>
			<script>setTimeout(() => {  document.getElementById('deleteAdm').classList.add('hidden'); }, 3000); </script>
		   ";
		
		?>
			<script>
				var audio = new Audio(); 
				audio.src = 'sound/finish.mp3'; 
				audio.autoplay = true; 
			</script>
		<?php } ?>
		

		<script>


			
			var tx = document.getElementsByTagName('textarea');//РАСТЯГИВАЕМ_textarea

			for (var i = 0; i < tx.length; i++) {

			tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');

			tx[i].addEventListener("input", OnInput, false);

			}

			function OnInput() {

			this.style.height = 'auto';

			this.style.height = (this.scrollHeight) + 'px';//////console.log(this.scrollHeight);

			}
			
			function copytext(el) {
				var $tmp = $("<textarea>");
				$("body").append($tmp);
				$tmp.val($(el).text()).select();
				document.execCommand("copy");
				$tmp.remove();
				document.getElementById('copy').innerHTML = "<div id='info' class='alert info alert-info mb-0' role='alert'><strong>Скопировано!</strong></div>";

				setTimeout(() => {  document.getElementById('info').classList.add('hidden'); }, 300);
			} 


		</script>

			<?php if(isset($message)){ ?>
			<?php echo $message; ?>
			<?php } ?>
			

    </body>
</html>
