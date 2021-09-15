<?php

$pc1 = new Computer('ATX Microtower ');
try {
    $pc1->addMotherBoard('MSI super socket 949');
    $pc1->mountDrive('512');
    $pc1->addCPU('Intel i5 10800U');
    $pc1->addRAM('Corsair 16 GB dual channel pack');
    $pc1->connectKeyboard('ConnectIT battle RNBW Edition');
    $pc1->connectMouse('Razer mamba');
    $pc1->addGPU('Geforce GTX 1030');
    $pc1->connectDisplay('Samsung SQC1050');
    $pc1->addPowerSupply('NZXT 650W');
    echo "Computer connected all peripherials successfully!";
} catch (\Throwable $th) {
    echo "Computer issues:" . $th->getMessage();
}
