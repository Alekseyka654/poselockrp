<?php

class Config
{
    // Настроек от проекта в личном кабинете free-kassa.ru
    const MERCHANT_ID = '104513';
    const SECRET_KEY_1 = '5p3qyozk';
    const SECRET_KEY_2 = '5p3qyozk';
    
    // Стоимость товара в руб.
    const ITEM_PRICE = 10;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'name';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'credits';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '151.80.47.109';
    // Имя пользователя
    const DB_USER = 'gs9272';
    // Пароль
    const DB_PASS = 'rz3Ag27Ehi';
    // Назывние базы
    const DB_NAME = 'gs9272';
}