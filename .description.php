<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Bizproc\FieldType;
use Bitrix\Main\Localization\Loc;

$arActivityDescription = [
    "NAME" => Loc::getMessage("INTERCOM_GC_NAME"),
    "DESCRIPTION" => Loc::getMessage("INTERCOM_GC_DESCRIPTION"),
    "TYPE" => "activity",
    "CLASS" => "IntercomGetConversationActivity",
    "JSCLASS" => "BizProcActivity",
    "CATEGORY" => [
        "OWN_ID" => "intercom",
        "OWN_NAME" => "Intercom",
    ],
    "RETURN" => [
        "ConversationBody" => [
            "NAME" => Loc::getMessage("INTERCOM_GC_RETURN_FIELD_CONVERSATION_BODY"),
            "TYPE" => FieldType::INT,
        ],
        "TicketId" => [
            "NAME" => Loc::getMessage("INTERCOM_GC_RETURN_FIELD_TICKET_ID"),
            "TYPE" => FieldType::INT,
        ],
        "TicketState" => [
            "NAME" => Loc::getMessage("INTERCOM_GC_RETURN_FIELD_TICKET_STATE"),
            "TYPE" => FieldType::INT,
        ],
    ],
];
