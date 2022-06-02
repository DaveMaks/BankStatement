<?php

namespace BankStatement;


use App\Models\Contact;
use BankStatement\Model\Cash;
use BankStatement\Model\InOutCash;
use \Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;


class Parsing
{
    /**
     * формат файла 1С
     */
    const TYPE_FILE_1C = 1;
    /**
     * формат файла из таблиц xls
     */
    const TYPE_FILE_XLS = 2;
    /**
     * попытатся определить автоматичеки
     */
    const TYPE_FILE_AUTO = 0;

    var $IINBIN = null;

    /** Создать объект для разбора файла выписки в формате 1С
     * @param string $Company_IINBIN ИИН или БИН компании для нонимания приход это или расход
     */
    public function __construct(string $Company_IINBIN)
    {
        $this->IINBIN = $Company_IINBIN;
    }

    /**
     * Разобрать файл
     * @param string $path путь до файла
     * @param int $type шаблона и тип файла
     * @return Cash[] массив объектов
     * @throws Exception
     */
    function UploadFile(string $path, $type = self::TYPE_FILE_AUTO)
    {
        // TODO переделать под разные типы и форматы файлов
        return (new FileType1C($this->IINBIN))->ReadFile($path);
    }

    /**
     * Разобрать файл
     * @param string $path путь до файла
     * @param string $Company_IINBIN
     * @param int $type шаблона и тип файла
     * @return Cash[] массив объектов
     * @throws Exception
     */
    static function File(string $path, $Company_IINBIN, $type = self::TYPE_FILE_AUTO)
    {
        // TODO переделать под разные типы и форматы файлов
        return (new FileType1C($Company_IINBIN))->ReadFile($path);
    }


}
