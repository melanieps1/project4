# Villain Mail

Villain Mail is a messaging application for villains.

## Instructions and MVP

This project is different than the others you've done. You are given a work in progress and must fix some bugs and add some new features.

For the MVP:

1. Clone the repo from the link posted in Slack. 
2. Set the project up locally. 
3. Complete at least one bug fix and one new feature from the lists below.
4. Push your updated code to a repo in your personal github account and set up an application for it in Heroku. 
5. Turn in links to your Heroku project and your repo.

If you complete the MVP before the end of the day, continue working on bugs and features to build out Villain Mail. After you complete one feature from this list, you are free to add any features you think would enhance the product. 

Have fun and enjoy your day of coding!

## Things that are done

1. Basic database design for minimal features.

2. Initial logged-in user homepage ("home").

3. Splash screen for users that are not logged in.

## Bugs

1. [x] The home screen shows everyone's messages, not just the ones sent to the logged-in user. OOOPS. This is probably a great big security problem.

2. [x] Unread messages should show up as bold (or with some other kind of highlighting) on the home screen.

3. [x] The date displayed on the home screen is very hard to read. Change it to something more user-friendly.

## New Features

1. [ ] There's no way to enter a new message. Create a form for that. The only valid recipients for a message should be other VMail users (no external email addresses).

2. [ ] You should be able to click on a message in the home screen to view it, reply to it, and star it.

3. [ ] When a message has been read, it should no longer be highlighted on the home screen.

4. [ ] The seed data shows the same message being sent to multiple recipients. It would be more efficient if the database supported multiple recipients on a single message. Create migrations to modify the tables to support a one-to-many relationship between messages and recipients.

5. [x] Users should be able to view messages they have sent. Sent messages should always display as if they were read; users know what they wrote.

6. [x] Users should be able to delete messages they have received or sent. (How should this be handled if you've completed #4?)

7. [ ] Bootstrap is nice, but this application could use its own style and design.
 
