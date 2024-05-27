namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class AssetController extends Controller
{
    public function handleAssetRefusal(Request $request)
    {
        // Validate the request data
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $comment = $request->input('comment');
        $userEmail = auth()->user()->email;

        // Send email with the refusal reason
        Mail::send('emails.asset-refusal', ['comment' => $comment], function ($message) use ($userEmail) {
            $message->to('admin@example.com') // Replace with your admin email
                    ->subject('Asset Refusal Notification')
                    ->from($userEmail);
        });

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Your comment has been sent.');
    }
}
