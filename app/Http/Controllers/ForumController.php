<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = [
            [
                'name' => 'Design',
                'image' => 'path/to/design-image.jpg',
                'link' => 'https://chat.whatsapp.com/CGqXR30pKh2HbYmCJfV0Om'
            ],
            [
                'name' => 'Business',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/InVMgffSDAy75EUvRyVl18'
            ],
            [
                'name' => 'Personal Development',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/H8UZQcg7xcXJcjbSQz2K2j'
            ],
            [
                'name' => '3D and Animation',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/G3he87Tu1nI7GT9t0ddMMv'
            ],
            [
                'name' => 'Finance & Accounting',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/HV2UmmouNYE4iL1lzfy2ip'
            ],
            [
                'name' => 'Marketing',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/I1HOKZxNonW8VzLpph6tHf'
            ],
            [
                'name' => 'Lifestyle',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/CM0kihPeEtl06kb62HXe9S'
            ],
            [
                'name' => 'Health & Fitness',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/LqulRRfa6Dh4ZAo2r7y2DN'
            ],
            [
                'name' => 'Development',
                'image' => 'path/to/business-image.jpg',
                'link' => 'https://chat.whatsapp.com/KX0Yuw0WaBG1UGQ5MGaQOM'
            ],
            [
                'name' => 'IT & Software',
                'image' => 'path/to/business-image.jpg',
                'link' => 'httpshttps://chat.whatsapp.com/HP15qezfnqiKxYcmUF6V8s'
            ],
        ];

        return view('forum', compact('forums'));
    }
}
