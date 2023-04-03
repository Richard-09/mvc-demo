<?php

  //Array (arreglo) mas sencillo
  $platos = ["Ceviche", "Arroz con pollo", "Carapulcra", "Ají de Gallina", "Lomo saltado"];
  echo $platos[0];

  $amigos = array("Jose", "Joel", "Lorenzo", "Cesar");
  echo $amigos[1];

  $aplicaciones =[
    ["Photoshop", "Corel Draw", "Premier", "Muse"],
    ["VSCode", "Xamp", "NetBeans", "Erwin", "Notepad++"],
    ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]
  ];

  //Obtener VSCode
  echo $aplicaciones[1][0];

  //Obtener Muse
  echo $aplicaciones[0][3];

  //Obtener SAP
  echo $aplicaciones[2][1];

  //Hasta aqui, cualquier de los arreglos anteriores, utiliza un Índice (int)
  //ARREGLOS ASOCIATIVOS..... KEY => VALUE

  $datosPersonales = [
    "apellidos"     => "De la Cruz Campos",
    "nombres"       => "Richard",
    "especialidad"  => "Ingenieria de software con IA",
    "email"         => "1303455@senati.pe",
    "edad"          => 38,
    "estacasado"    => false,
    "peliculas"     => "Toy story","Toy story 2","Toy story 3"
  ];



?>