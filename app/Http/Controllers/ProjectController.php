<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{

    /*
    Chunk: fragmentando múltiples registros
    al intentar traer por ejemplo 900 registros, el rendimiento de la aplicación baja, se puede morir el servidor y ya
    no logramos tener todos los datos.
    Para evitar este problema tenemos un comando que nos va a traer los registros por secciones, este es chunk, al cual
    le pediremos un bloque menor de registros y fragmentará la cantidad de valores hasta tenerlos todos.

    public function getAllProjects()
    {
        $projects = Project::chunk(200, function ($projects) {
            foreach ($projects as $project) {
                //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
            }
        });
        return $projects;
    }
    */
    //

    /**/
    public function getAllProjects()
    {
        $projects = Project::orderBy('created_at', 'desc')->take(10)->get();
        return $projects;
    }

    /*Insertar 30 registros en mi BD*/
    public function insertProject() {
        for ($i=1; $i <= 30; $i++) {
            $project = new Project;
            $project->city_id = 1;
            $project->company_id = 1;
            $project->user_id = 1;
            $project->name = 'Proyecto '.$i;
            $project->execution_date = '2023-05-11';
            $project->is_active = 1;
            $project->save();
        }
        return "<script>alert('Registros guardados');</script>";
    }


    /*Insercion de datos que vienen de un formulario*/
    public function insertProjectRequest(Request $request) {
        $project = new Project;
        $project->city_id = $request->cityId;
        $project->company_id = $request->companyId;
        $project->user_id = $request->userId;
        $project->name = $request->name;
        $project->execution_date = $request->executionDate;
        $project->is_active = $request->isActive;
        $project->save();
    }

    /*Actualizar un campo de mi tabla*/
    public function updateProject() {
        $project = Project::findOrFail(56);
        $project->name = 'Proyecto de tecnología';
        $project->save();

        /* Actualizar registros por condiciones específicas
         * Project::where('is_active', 1)
            ->where('city_id', 4)
            ->update(['execution_date' => '2020-02-03']);*/

        return "<script>alert('Registros actualizado');</script>";
    }

    /*cambio del nombre de todos los proyectos inactivos en la tabla de projects.*/
    public function updateProjects() {
        $projects = Project::where('is_active', 1)->get();
        foreach ($projects as $project) {
            /*$project->execution_date = '2024-06-19';*/
            $project->name = 'software gobierno';
            $project->save();
        }
        return "<script>alert('Registros actualizados');</script>";
    }
}
