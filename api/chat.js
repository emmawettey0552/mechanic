export default async function handler(req, res) {
  const API_KEY = process.env.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;

  const response = await fetch("https://api.openai.com/v1/chat/completions", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "Authorization": "Bearer " + API_KEY
    },
    body: JSON.stringify({
      model: "gpt-4o-mini",
      messages: [
        { role: "system", content: "You are a professional mechanic in Ghana." },
        { role: "user", content: req.body.message }
      ]
    })
  });

  const data = await response.json();
  res.status(200).json(data);
}
