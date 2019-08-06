### PHP Contact Form

#### About the Project 🔎🔎🔎
I was assigned a project to create a contact form using PHP. The contact form had no importance placed upon CSS and more upon functionality. It was important that the form worked and the learner discovered how to do it all.

#### Process of the Project 📐📐📐
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
- I had a wonderful header that refreshes every 6 seconds to the `index.html` file, giving the user enough time to read error messages if they appear.

![alt text](http://giphygifs.s3.amazonaws.com/media/10UtqJNULHPfxe/giphy.gif)

#### A Learning Experience 👷👷👷
I came in the next morning and someone made an offhand comment about not being stupid enough to put your own information into a file and commit it and push it to github. I thought "Oh ****!" because I remember I had done it for one of the files the day before and had completely forgot about it. 

![alt text](https://66.media.tumblr.com/99b0cce28ce28ee9d0a9feec6c1ffcbb/tumblr_msdd8qZAet1sgl0ajo1_500.gif)

So I set about
1. Finding the erring commit.
2. Figuring out how to delete 1 commit from a history.
I had 35 commits and 15 after the problem commit.
3. I looked for a good hour and a half for what I should do, and I asked the people around me and they said the only solution was to delete the repository (because it was compromised).
    1. I said: "I don't want to lose all of my work.". So I tried rebasing and cherry picking and it didn't work so I was disappointed I would lose all of my work but I couldn't have my personal information just sitting there.
    2. I had to delete the repository.
    3. 4 times... Until I figured out how to finally conceal my private information with a separate php file and a `.gitignore` file.

Although it was a painful process to lose all of my hard-working commits, every experience of PHP is a learning process. I am happy to know now one of the ways I can hide sensitive information from prying eyes.

![alt text](https://media3.giphy.com/media/3og0INdmjMr8BIiIlG/giphy.gif)

#### Visual Representation 🖼️🖼️🖼️
After the security debacle, I finally had a working code where my secrets were hidden and I could send emails using my PHP contact form to an SMTP mail server. I ended up not focusing on the CSS for this project because I am very much focusing on how to make things work rather than how they look. If I have more time for the project I will add some visual enhancement to this project, but for now this is how it looks:

![alt text](/img/phpcontactfront.png)

Here is what the final project looks like when all the errors are triggered:

![alt text](/img/fullerrorpage.png)

![alt text](https://media.tenor.com/images/0a56c62c3a94c0a2fd0da12a49543f5b/tenor.gif)
