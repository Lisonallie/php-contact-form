### PHP Contact Form

#### About the Project
I was assigned a project to create a contact form using PHP. The contact form had no importance placed upon CSS and more upon functionality. It was important that the form worked and the learner discovered how to do it all.

#### Process of the Project
The making of the PHP contact form required many steps with a lot of debugging along the way:
- I first started by making the form in HTML using semantic HTML. 
- I then connected my form identities with the `POST` method and included the `POST` action in variables in PHP. 
- I made sure these inputted strings wouldn't cause me to be hacked by implementing a `filter_var` and various `SANITIZATION` techniques for each field depending on what kind of input they were.
    - I had a couple types of input:
        - string
        - number
        - email
        - textbox
    - I wanted to try using different kinds to learn about them.
- Next, I searched a lot on google to find the `preg_match` condition for regular expressions. I spent time learning about all of the different combinations and what they mean.
- I figured out how to use these functions in my code to require the correct strings to be inputted.
- Then I set about figuring out how to get my email to connect to a SMTP server to receive emails from my form on my local server.
- I stumbled across [mailtrap.io](https://mailtrap.io/) and a tutorial on how to set up an SMTP server using that. I liked this option more than using Gmail's SMTP server because I didn't want to compromise my personal credentials.
    - Little did I know I had already compromised my info trying to set up PHPMailer with a SMTP server (a problem I ran into later).
- I connected the mail server and successfully sent myself emails in mailtrap while debugging along the way and finding out how to implement the mail server into my own code.

#### And then...
I came in the next morning and someone made an offhand comment about not being stupid enough to put your own information into a 