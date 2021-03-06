<?php

/**
 * @defgroup plugins_paymethod_pagseguro PagSeguro Payment Processing Plugin
 */

/**
 * @file plugins/paymethod/pagseguro/index.php
 *
 * Copyright (c) 2018 FFPL
 * Distributed under the MIT licence.
 *
 * @ingroup plugins_paymethod_pagseguro
 * @brief Wrapper for PagSeguro payment plugin.
 */

require_once('PagseguroPaymentPlugin.inc.php');

return new PagseguroPaymentPlugin();

?> 
