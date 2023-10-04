<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class EstadoCivil extends Enum
{
    #[Description('Solteiro(a)')]
    const SOLTEIRO = 'SOLTEIRO';

    #[Description('Divorciado(a)')]
    const DIRVOCIADO = 'DIVORCIADO';

    const OptionThree = 2;
}
