<?php

/**
 * JIT Compilation -> mempercepat proses eksekusi program
 * Opcache kna membuat kode program terhindar dari harus melakukan tokenize, parsing dan compile berulang
 * JIT membuat hasil kompilasi di jalankan langsung oleh mesin lokal bukan vm
 * JIT bisa mentranslate hasil compile opcodes ke intruksi machine karena ada DynASM
 */

