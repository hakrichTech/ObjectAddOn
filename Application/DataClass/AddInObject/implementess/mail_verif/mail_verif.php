<?php
namespace ObjectAddOn\AddInObject\implementess\mail_verif;

/**
 *
 */
interface mail_verif
{

    const DOMAIN_MAX=254;
    const DOMAIN_ERROR=4;
    const DOMAIN_SP_CHAR=5;
    const VALIDE="Email Valide!";


    const Domain_error="Email invalide, Domain error";
    const Recipient_error="Email invalide, Recipient error";
    const Recipient_length_bigger="Email invalide, Recipient Length is bigger";
    const Email_error_espace="Email invalide, Contain space";
    const Email_error_at="Email invalide, uncontained @ special character";
    const Recipient_error_sp_char_two="Email invalide, Recipient contain 2 special chars";
    const Subdomain_error="Email invalide, Sub_domain error";
    const Domain_sp_char="Email invalide, Domain contain unauthorized special char";
    const Domain_sp_char_two="Email invalide, Domain contain 2 special char";
    const Subdomain_sp_char="Email invalide, Sub_domain contain unauthorized special char";
    const Subdomain_sp_char_two="Email invalide, Sub_domain contain 2 special chars";
    const Email_incorrect_dot="Email invalide, uncontained dot";


    const SUBDOMAIN_SP_CHAR=9;
    const DOMAIN_CORRECT=6;
    const SUBDOMAIN_CORRECT=11;
    const DOMAIN_SP_CHAR_TWO=7;
    const SUBDOMAIN_SP_CHAR_TWO=10;
    const SUBDOMAIN_ERROR=8;
    const RECEPIENT_MAX=65;
    const RECEPIENT_ERROR=0;
    const RECEPIENT_LENGTH_BIGGER=18;
    const RECEPIENT_ERROR_SP_CHAR_TWO=2;
    const RECEPIENT_PROHIBITED=1;
    const RECEPIENT_CORRECT=3;
    const EMAIL_ERROR_ESPACE=12;
    const CHECK_VALIDITY=1;
    const EMAIL_ERROR_AT=13;
    const EMAIL_CORRECT=30;
    const EMAIL_INCORRECT_DOT=19;
}


 ?>
