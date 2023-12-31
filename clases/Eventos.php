<?php
    include "Conexion.php";

    class Eventos extends Conexion {
        public function mostrarEventos($id_usuario){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_eventos WHERE id_usuario = '$id_usuario'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function editarEventos($id_evento){
            $conexion = Conexion::conectar();
            $sql = "SELECT id_evento,
                           evento,
                           DATE_FORMAT(hora_inicio, '%H:%i:%s') AS hora_inicio,
                           DATE_FORMAT(hora_inicio, '%H:%i:%s') AS hora_fin,
                           fecha                   
                    FROM 
                        t_eventos 
                    WHERE id_evento = '$id_evento'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }


        public function agregar($data){
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO t_eventos (id_usuario,
                                           evento,
                                           hora_inicio,
                                           hora_fin,
                                           fecha) 
                            VALUES (?, ?, ?, ?, ?)";
                            $query = $conexion->prepare($sql);
                            $query->bind_param('issss', $data['id_usuario'],
                                                        $data['evento'],
                                                        $data['hora_inicio'],
                                                        $data['hora_fin'],
                                                        $data['fecha']);
                            return $query->execute();                           
        }
        public function eliminarEvento($id_evento) {
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM t_eventos WHERE id_evento = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $id_evento);
            return $query->execute();
        }

        public function actualizarEvento($data){
            $conexion = Conexion::conectar();
            $sql="UPDATE t_eventos SET id_usuario = ?,
                                       evento = ? ,
                                       hora_inicio = ?,
                                       hora_fin = ?,
                                       fecha = ? 
                  WHERE id_evento = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('issssi', $data['id_usuario'],
                                         $data['evento'],
                                         $data['hora_inicio'],
                                         $data['hora_fin'],
                                         $data['fecha'],
                                         $data['id_evento']);
            return $query->execute();
        }
}
?>