I produce you my idea for work with database/servers. Imagine we have network which has at least 2billion users and if push all the data in one table or server and then do
some actions with it, it won't work fast enough. In our network we set a rule that same email can't be registered twice. Now when a user registers before connecting to database/server 
to insert the data there, we take the email (f.e. : abcd@gmail.com) and start connecting to database/server. It takes the firsty letter of email, in our case it's : "a", and then
connects to the database/server named "a". Then it takes first two letters : "ab", and connects to the table named "ab" in the "a" database and after that the data is being inserted.
Same with delete, update and select.
