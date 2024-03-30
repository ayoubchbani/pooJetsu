<?php
namespace Class\Enums;

enum OfficeStatut: string {

   case APPROVAL_PENDING = "en attente";
   case APPROVAL_APPROVED = "approuvée";
   case APPROVAL_REJECTED = "rejetée";
}