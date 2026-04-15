<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Clean Contact Form Submission</title>
</head>
<body style="margin:0;padding:24px;background:#f4f7f3;font-family:Arial,Helvetica,sans-serif;color:#173120;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:720px;border-collapse:collapse;background:#ffffff;border-radius:20px;overflow:hidden;box-shadow:0 18px 45px rgba(23,49,32,0.12);">
                    <tr>
                        <td style="padding:28px 32px;background:linear-gradient(135deg,#173120 0%,#2d6a4f 100%);color:#ffffff;">
                            <p style="margin:0 0 8px;font-size:12px;letter-spacing:1.5px;text-transform:uppercase;opacity:0.82;">Eco Clean</p>
                            <h1 style="margin:0;font-size:28px;line-height:1.2;">New contact form submission</h1>
                            <p style="margin:12px 0 0;font-size:14px;line-height:1.6;opacity:0.9;">A visitor submitted a request through the website contact form.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:separate;border-spacing:0 12px;">
                                <tr>
                                    <td width="50%" style="padding:16px;border:1px solid #d8e6d8;border-radius:14px;background:#f8fbf7;vertical-align:top;">
                                        <p style="margin:0 0 6px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Name</p>
                                        <p style="margin:0;font-size:16px;font-weight:700;color:#173120;">{{ $payload['name'] }}</p>
                                    </td>
                                    <td width="50%" style="padding:16px;border:1px solid #d8e6d8;border-radius:14px;background:#f8fbf7;vertical-align:top;">
                                        <p style="margin:0 0 6px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Email</p>
                                        <p style="margin:0;font-size:16px;font-weight:700;color:#173120;">{{ $payload['email'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" style="padding:16px;border:1px solid #d8e6d8;border-radius:14px;background:#f8fbf7;vertical-align:top;">
                                        <p style="margin:0 0 6px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Phone</p>
                                        <p style="margin:0;font-size:16px;font-weight:700;color:#173120;">{{ $payload['phone'] !== '' ? $payload['phone'] : 'Not provided' }}</p>
                                    </td>
                                    <td width="50%" style="padding:16px;border:1px solid #d8e6d8;border-radius:14px;background:#f8fbf7;vertical-align:top;">
                                        <p style="margin:0 0 6px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Regarding</p>
                                        <p style="margin:0;font-size:16px;font-weight:700;color:#173120;">{{ $payload['subject'] !== '' ? $payload['subject'] : 'General Inquiry' }}</p>
                                    </td>
                                </tr>
                            </table>

                            <div style="margin-top:24px;padding:20px;border-radius:16px;background:#173120;color:#ffffff;">
                                <p style="margin:0 0 10px;font-size:12px;text-transform:uppercase;letter-spacing:1px;opacity:0.78;">Message</p>
                                <p style="margin:0;font-size:15px;line-height:1.8;white-space:pre-line;">{{ $payload['message'] !== '' ? $payload['message'] : 'No message was included in this submission.' }}</p>
                            </div>

                            <div style="margin-top:24px;padding:20px;border:1px solid #d8e6d8;border-radius:16px;background:#f8fbf7;">
                                <p style="margin:0 0 12px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Submission details</p>
                                <p style="margin:0 0 8px;font-size:14px;line-height:1.7;"><strong>Submitted:</strong> {{ $payload['submitted_at']->format('F j, Y g:i A') }}</p>
                                <p style="margin:0;font-size:14px;line-height:1.7;word-break:break-all;"><strong>Source page:</strong> {{ $payload['source_url'] }}</p>
                            </div>

                            @if (! empty($payload['fields']))
                                <div style="margin-top:24px;">
                                    <p style="margin:0 0 12px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#5a6f60;">Captured fields</p>
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #d8e6d8;border-radius:16px;overflow:hidden;">
                                        @foreach ($payload['fields'] as $label => $value)
                                            <tr>
                                                <td style="padding:14px 16px;border-bottom:1px solid #d8e6d8;background:#ffffff;font-size:14px;font-weight:700;color:#173120;width:34%;">{{ $label }}</td>
                                                <td style="padding:14px 16px;border-bottom:1px solid #d8e6d8;background:#fcfdfb;font-size:14px;line-height:1.7;color:#395243;">{{ $value }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
