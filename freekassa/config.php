<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '104513';
    const SECRET_KEY_1 = '5p3qyozk';
    const SECRET_KEY_2 = '5p3qyozk';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 10;

    // ������� ���������� ������, �������� `users`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'name';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'credits';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = '151.80.47.109';
    // ��� ������������
    const DB_USER = 'gs9272';
    // ������
    const DB_PASS = 'rz3Ag27Ehi';
    // �������� ����
    const DB_NAME = 'gs9272';
}