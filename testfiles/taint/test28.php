<?php

// local variables that alias neither globals nor formals:
// make sure they are also handled across function calls

a();

function a() {
    $a1 = $GLOBALS['evil'];
    b();
    ~_hotspot0;     // a.a1:T/D
}

function b() {
}


?>