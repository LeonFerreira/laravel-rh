<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class EstadoCivil extends Enum
{
    const DEFAULT = 'SOLTEIRO TESTE';

    #[Description('Solteiro(a)')]
    const SOLTEIRO = 'SOLTEIRO';

    #[Description('Casado(a)')]
    const CASADO = 'CASADO';

    #[Description('Divorciado(a)')]
    const DIRVOCIADO = 'DIVORCIADO';

    #[Description('Separado(a)')]
    const SEPARADO = 'SEPARADO';

    #[Description('União Estável')]
    const UNIAO_ESTAVEL = 'UNIAO_ESTAVEL';

    #[Description('Viúvo(a)')]
    const VIUVO = 'VIUVO';
}
