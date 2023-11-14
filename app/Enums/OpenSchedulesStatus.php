<?php

namespace App\Enums;

enum OpenSchedulesStatus: string {
    case L = "Livre";
    case O = "Ocupado";
    case A = "Andamento";

	// função que irá retornar o value de algum status
    public static function fromValue(string $name): string {
        foreach (self::cases() as $status) {
            if($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status is not valid");
    }
}