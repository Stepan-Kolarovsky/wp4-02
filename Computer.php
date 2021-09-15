<?php
 class Computer
{
 private string $case;

 public function __construct(string $case) {
    $this ->case = $case;
    
}

public function addMotherBoard(string $MB){
    $this->MB = $MB;
}
public function mountDrive(int $SSD)
{
    if(isset($this->MB)) {
        $this->SSD = $SSD;
        return TRUE;
    }
  throw new Exception("Musí obsahovat základní desku"); 
}

public function addCPU(string $CPU)
{
    if(isset($this->MB)) {
        $this->CPU = $CPU;
        return TRUE;
    }
    throw new Exception("Musí obsahovat základní desku"); 
}

public function addRAM(string $RAM)
{
    if(isset($this->MB)) {
        $this->RAM = $RAM;
        return TRUE;
    }
    throw new Exception("Musí obsahovat základní desku"); 
}

public function connectKeyboard(string $keyboard)
{
    if(isset($this->MB)) {
        $this->keyboard = $keyboard;
        return TRUE;
    }
    throw new Exception("Musí obsahovat základní desku"); 
}

public function connectMouse (string $mouse )
{
    if(isset($this->MB)) {
        $this->mouse = $mouse;
        return TRUE;
    }
    throw new Exception("Musí obsahovat základní desku"); 
}

public function addGPU (string $GPU )
{
    if(isset($this->MB)) {
        $this->GPU = $GPU;
        return TRUE;
    }
    throw new Exception("Musí obsahovat základní desku"); 
}


public function connectDisplay (string $display )
{
    if(isset($this->GPU)) {
        $this->display = $display;
        return TRUE;
    }
    throw new Exception("Musí obsahovat grafickou kartu"); 
}

public function addPowerSupply (string $PSU )
{
    if(isset($this->case)) {
        $this->PSU = $PSU;
        return TRUE;
    }
    throw new Exception("Musí obsahovat počítačovou bednu"); 
}}
?>