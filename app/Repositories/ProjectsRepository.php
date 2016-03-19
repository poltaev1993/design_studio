<?php


namespace App\Repositories;

use App\Category;
use Illuminate\Http\Request;
use App\Project;
use PhpSpec\Exception\Example\ExampleException;
use Validator, Image;

class ProjectsRepository {

    public function create(Category $category, Request $request)
    {
        /*$project = Project::create($request->all());

        if (!$project) return false;*/

        $validation = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'executed_at' => 'required',
                'purpose' => 'required',
                'location' => 'required',
                'description' => 'required'
            ]
        );

        if ($validation->fails()) return false;

        $project = $category->projects()->create($request->all());

        if ($request->hasFile('preview'))
        {
            $file = $request->file('preview');

            $dir = '/uploads/projects/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            if ($upload_success)
            {
                try
                {
                    $img = Image::make($destinationPath . $filename);
                    $img->resize(475, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    $img->save($destinationPath . $filename);

                    $project->preview = $dir . $filename;
                }
                catch (Exception $e) {}
            }
        }

        $project->save();

        if ($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $image)
            {
                if ($image == null) continue;

                $dir = '/uploads/projects/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(40) . '.' . $extension;

                while( file_exists($destinationPath . $filename) )
                    $filename = str_random(40) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success)
                {
                    $project->photos()->create(['image' => $dir . $filename]);
                }
            }
        }

        return $project->id;
    }

    public function update(Category $category, $id, Request $request)
    {
        $project = $category->projects()->find($id);

        $project->update($request->all());

        if ($request->hasFile('preview'))
        {
            $file = $request->file('preview');

            $dir = '/uploads/projects/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            if ($upload_success)
            {
                try
                {
                    $img = Image::make($destinationPath . $filename);
                    $img->resize(475, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    $img->save($destinationPath . $filename);

                    $project->preview = $dir . $filename;
                }
                catch (Exception $e) {}
            }
        }


        if ($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $image)
            {
                if ($image == null) continue;

                $dir = '/uploads/projects/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(40) . '.' . $extension;

                while( file_exists($destinationPath . $filename) )
                    $filename = str_random(40) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success)
                {

                    if ( $project_photo = $project->photos()->find($key) )
                    {
                        $project_photo->image = $dir . $filename;
                        $project_photo->save();
                    }
                    else
                    {
                        $project->photos()->create(['image' => $dir . $filename]);
                    }

                }
            }
        }

        $project->save();

        return true;
    }

    public function deleteProject(Category $category, $id)
    {
        $project = $category->projects->find($id);

        foreach($project->photos() as $photo)
        {
            unlink(public_path() . $photo);
        }

        $project->photos()->delete();

        $project->preview ? unlink(public_path() . $project->preview) : '';

        $project->delete();

        return true;
    }
    
}