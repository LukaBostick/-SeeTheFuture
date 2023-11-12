const { Vonage } = require('@vonage/server-sdk');

const vonage = new Vonage({
  applicationId: "0c1ea98b-d6d9-4906-b780-ac9e63c78e21",
  privateKey: "./private.key"
});

text = "👋Hello from Vonage";

vonage.messages
  .send({
    text: text,
    message_type: "text",
    to: "19723692368",
    from: "12019778907",
    channel: "sms",
  })
  .then((resp) => console.log(resp.message_uuid))
  .catch((err) => console.error(err));