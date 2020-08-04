<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/*
		Команды linux
	pwd             - текущий путь
	ls -la          - просмотр папок и файлов
	cd ~            - переход к папке пользователя
	cat file        - посмотреть содержимое файла
	rm file         - удалить файл
	rm -rf file     - удалить рекурсивно

*/



/*
		SSH
	https://firstvds.ru/technology/dobavit-ssh-klyuch
	1)  ssh-keygen - сгенерить ключ
	2)  cd .ssh/
	3)  cat id_rsa.pub
	4)  перейти на сервер
	5)  создать authorized_keys
            chmod 700 ~/.ssh
			chmod 600 ~/.ssh/authorized_keys
	6)  Вставить в authorized_keys ключ


		config
	https://debian.pro/395
	https://linuxize.com/post/using-the-ssh-config-file/
			Host test-bitrix
			User bitrix
			Port 22
			HostName 192.168.0.104


*/



require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>