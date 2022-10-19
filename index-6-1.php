<?php

use Devavi\Architecture\Models\Vacancy;
use Devavi\Architecture\Models\Applicant;

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        include $file;
    }
};

$applicant1 = new Applicant('Федор Крылов', 'fedya@example.com', 3);
$applicant2 = new Applicant('Иван Иванов', 'ivan@example.com', 3);
$applicant3 = new Applicant('Рус Сказкин', 'skazkin@mail.com', 5);

$vacancy = new Vacancy('HandHunter.gb');
$vacancy->attach($applicant1);
$vacancy->attach($applicant2);
$vacancy->attach($applicant3);
$vacancy->addVacancy('Первая вакансия');

echo '__________________' . PHP_EOL;

$vacancy->detach($applicant3);
$vacancy->addVacancy('Вторая вакансия');
