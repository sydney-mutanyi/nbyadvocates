<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Form Submission</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f5f5f5;">
  <table role="presentation" style="width: 100%; border-collapse: collapse;">
    <tr>
      <td style="padding: 40px 20px;">
        <table role="presentation" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
          
          <!-- Header -->
          <tr>
            <td style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); padding: 40px 30px; text-align: center;">
              <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: bold; letter-spacing: 1px;">
                NB YASEEN ADVOCATES
              </h1>
              <p style="margin: 10px 0 0 0; color: #fee2e2; font-size: 14px; letter-spacing: 0.5px;">
                New Contact Form Submission
              </p>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td style="padding: 40px 30px;">
              <div style="background-color: #fef2f2; border-left: 4px solid #dc2626; padding: 20px; margin-bottom: 30px; border-radius: 4px;">
                <p style="margin: 0; color: #991b1b; font-size: 14px; font-weight: 600;">
                  📩 You have received a new inquiry through the "Instruct Us" form
                </p>
              </div>

              <h2 style="color: #1f2937; font-size: 20px; margin: 0 0 25px 0; padding-bottom: 15px; border-bottom: 2px solid #e5e7eb;">
                Contact Information
              </h2>

              <table role="presentation" style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                <tr>
                  <td style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
                    <strong style="color: #4b5563; font-size: 14px; display: inline-block; width: 120px;">👤 Name:</strong>
                    <span style="color: #1f2937; font-size: 15px; font-weight: 500;">{{ $fullName }}</span>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
                    <strong style="color: #4b5563; font-size: 14px; display: inline-block; width: 120px;">📧 Email:</strong>
                    <a href="mailto:{{ $email }}" style="color: #dc2626; text-decoration: none; font-size: 15px; font-weight: 500;">{{ $email }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
                    <strong style="color: #4b5563; font-size: 14px; display: inline-block; width: 120px;">📱 Phone:</strong>
                    <a href="tel:{{ $telephone }}" style="color: #dc2626; text-decoration: none; font-size: 15px; font-weight: 500;">{{ $telephone }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 12px 0; border-bottom: 1px solid #f3f4f6;">
                    <strong style="color: #4b5563; font-size: 14px; display: inline-block; width: 120px;">🏢 Company:</strong>
                    <span style="color: #1f2937; font-size: 15px;">{{ $company }}</span>
                  </td>
                </tr>
              </table>

              <h2 style="color: #1f2937; font-size: 20px; margin: 0 0 15px 0; padding-bottom: 15px; border-bottom: 2px solid #e5e7eb;">
                Message
              </h2>
              <div style="background-color: #f9fafb; padding: 20px; border-radius: 8px; border: 1px solid #e5e7eb;">
                <p style="margin: 0; color: #374151; font-size: 15px; line-height: 1.6; white-space: pre-wrap;">{{ $inquiryMessage }}</p>
              </div>

              @if($hasAttachment)
              <div style="margin-top: 25px; padding: 15px; background-color: #eff6ff; border-radius: 8px; border: 1px solid #bfdbfe;">
                <p style="margin: 0; color: #1e40af; font-size: 14px;">
                  📎 <strong>Attachment:</strong> {{ $attachmentName }} ({{ $attachmentSize }} KB)
                </p>
              </div>
              @endif
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #f9fafb; padding: 30px; text-align: center; border-top: 1px solid #e5e7eb;">
              <p style="margin: 0 0 10px 0; color: #6b7280; font-size: 13px;">
                This email was sent from the NB YASEEN ADVOCATES website contact form
              </p>
              <p style="margin: 0; color: #9ca3af; font-size: 12px;">
                Diamond Plaza, Nairobi | +254 732 355 157 | info@nbyadvocates.com
              </p>
              <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #e5e7eb;">
                <p style="margin: 0; color: #9ca3af; font-size: 11px;">
                  Developed by <a href="https://digitalvortexltd.com" style="color: #dc2626; text-decoration: none;">Digital Vortex</a>
                </p>
              </div>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
