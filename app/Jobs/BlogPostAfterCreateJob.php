<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;

class BlogPostAfterCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var BlogPost 
     */
    private $msgObj;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($msgObj)
    {
        $this->msgObj = $msgObj;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        Mail::to('functionnel.com@gmail.com')->send($this->msgObj);
        logs()->info("Contact form message initiated: [{$this->msgObj}]");
    }
}
