<?php include 'header.php'; ?>

<div class="container contacts-container">
	<h1 class="stroke-title"><span>Наши контакты</span></h1>
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-4">
			<form id="form-id" class="form-contacts">
				<div class="form-group">
					<input class="form-control" name="name" type="text" placeholder="Ваше имя" />
				</div>
				<div class="form-group">
					<input class="form-control" name="tel" type="tel" placeholder="Номер телефона" required />
				</div>
				<div class="form-group">
					<textarea class="form-control" name="comment" cols="30" rows="9" placeholder="Сообщение" required></textarea>
				</div>
				<div class="form-group for-robots" style="display: none;">
					<input class="form-control" type="text" name="email" />
					<input class="form-control modal-form-value" type="text" name="title" />
				</div>
				<div class="centered">
					<button type="submit" class="btn btn-primary big">Отправить</button>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-8">
			<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Знаках которое встретил агенство заманивший образ страна возвращайся она? Подзаголовок, напоивший жизни ipsum вопрос которой текст пунктуация. Курсивных продолжил свое вскоре переулка на берегу, журчит пустился меня одна строчка большого что коварный великий снова языкового, оксмокс ручеек. Взгляд пунктуация коварных агенство имени использовало текст. Ее своего журчит он живет которой заглавных моей. Своего раз осталось языком это города, продолжил сих. Они гор силуэт свой дал языком, речью рекламных правилами коварных свою его подпоясал щеке дорогу ipsum, наш! Он, бросил заголовок путь даль дорогу, текст рукопись. Буквенных снова великий толку моей от всех?</p>
		</div>
	</div>
</div>

<div class="wrapper map">
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=bxygpacZTtdfjQjfxaiADocpxNOcFQ8w&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</div>

<?php include 'footer.php'; ?>