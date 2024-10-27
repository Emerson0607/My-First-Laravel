<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table  = 'job_listings';

    //to protect date for updating from user
    protected $fillable = ['title', 'salary']; 

}   

/* 
    phh artisan  -> cmd to show command for migration   
    php artisan migrate -> to update the configuration in database 
    php artisan make:model Post -m  -> use to create table with migration to the database
    
    To update the current table you need to create a new migration then you put the updated version 
    
    example:
    php artisan make:migration rename_column_in_posts_table --table=posts
    $table->text('body')->nullable();  

    php artisan make:migration rename_column_in_posts_table --table=posts
    $table->renameColumn('old_column_name', 'new_column_name');

    php artisan make:migration drop_column_from_posts_table --table=posts
    $table->dropColumn('column_name');

    
    php artisan make:migration modify_posts_table --table=posts
    // Add new columns
    $table->string('new_column')->nullable(); // Add new column
            
    // Update existing column
    $table->string('existing_column')->change(); // Update existing column type, adjust as needed

    // Drop a column
    $table->dropColumn('old_column'); 
    
    */


    /* 

    **To create factory**
    php artisan make:factory JobFactory

    **To generate factory data**
    php artisan tinker
    App\Models\Job::factory()->create();
    
    */

    // alt+shift+a  -> block comment
