<?php
session_start();
session_unset(); // Limpa os valores da sessão
session_destroy();// Destroi os valores da sessão