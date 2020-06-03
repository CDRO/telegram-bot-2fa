# Telegram Bot SSO

This bot allows you to:
1. Register to the bot
2. De-register by the bot

For this just add `@CabSSOBot` to Telegram and either `/start` or `/stop` to receive notifications.
There is no other funcitonality.

## Use the bot to send SSO keys

The bot is able to send you a message to a registered user.
To do so, you need to:
- know the `chat_id` of your user
- call the end point by doing a post (i.e. with cURL: `curl -d "chat_id=1234&text=any%20text%20you%20%want%urlencoded" -x POST https://example.com/endpoint/?token=your_safety_token)
