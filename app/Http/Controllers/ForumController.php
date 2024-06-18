<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Audiens;

class ForumController extends Controller
{
    public function index()
    {
        $forums = [
            [
                'name' => 'Design',
                'image' => 'assets/images/Design.jpg',
                'link' => 'https://chat.whatsapp.com/CGqXR30pKh2HbYmCJfV0Om'
            ],
            [
                'name' => 'Business',
                'image' => 'assets/images/Business.png',
                'link' => 'https://chat.whatsapp.com/InVMgffSDAy75EUvRyVl18'
            ],
            [
                'name' => 'Personal Development',
                'image' => 'assets/images/Personal Development.jpg',
                'link' => 'https://chat.whatsapp.com/H8UZQcg7xcXJcjbSQz2K2j'
            ],
            [
                'name' => '3D and Animation',
                'image' => 'assets/images/3D.jpg',
                'link' => 'https://chat.whatsapp.com/G3he87Tu1nI7GT9t0ddMMv'
            ],
            [
                'name' => 'Finance & Accounting',
                'image' => 'assets/images/Finance.jpg',
                'link' => 'https://chat.whatsapp.com/HV2UmmouNYE4iL1lzfy2ip'
            ],
            [
                'name' => 'Marketing',
                'image' => 'assets/images/Marketing.jpg',
                'link' => 'https://chat.whatsapp.com/I1HOKZxNonW8VzLpph6tHf'
            ],
            [
                'name' => 'Lifestyle',
                'image' => 'assets/images/Lifestyle.jpg',
                'link' => 'https://chat.whatsapp.com/CM0kihPeEtl06kb62HXe9S'
            ],
            [
                'name' => 'Health & Fitness',
                'image' => 'assets/images/Fitness.jpg',
                'link' => 'https://chat.whatsapp.com/LqulRRfa6Dh4ZAo2r7y2DN'
            ],
            [
                'name' => 'Development',
                'image' => 'assets/images/Development.jpg',
                'link' => 'https://chat.whatsapp.com/KX0Yuw0WaBG1UGQ5MGaQOM'
            ],
            [
                'name' => 'IT & Software',
                'image' => 'assets/images/Software.jpg',
                'link' => 'httpshttps://chat.whatsapp.com/HP15qezfnqiKxYcmUF6V8s'
            ],
        ];
        $user = Auth::user();
        $audiens = Audiens::where('username', $user->name)->first();
        $profileImage = 'https://via.placeholder.com/100';
        if ($audiens && $audiens->profilePict) {
            $profileImage = 'data:image/jpeg;base64,' . base64_encode($audiens->profilePict);
        }

        return view('forum', compact('forums', 'profileImage'));
    }

}
