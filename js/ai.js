$(document).ready(function () {
    // Chat geçmişini saklamak için bir dizi oluştur
    var chat_history = [];

    // Chat geçmişini göstermek için bir fonksiyon
    function showChatHistory() {
        // chat_history dizisini kullanarak chat geçmişini görüntüleyin
        // Örnek olarak:
        chat_history.forEach(function (message) {
            // Her mesajı HTML içine ekleyin
            var messageElement = '<div class="' + message.role + '-message"><div class="' + message.role + '-message-inside"><p>' + message.content + '</p></div></div>';
            $('.chat-container').append(messageElement);
        });
    }

    // Sayfa yüklendiğinde chat geçmişini al
    // Bu işlem, sayfa yenilendiğinde chat geçmişini korur
    showChatHistory();

    // Chat formunun gönderimini ele almak için bir olay dinleyici
    $('.chat-form').submit(function (event) {
        event.preventDefault(); // Formun varsayılan davranışını engelle

        // Kullanıcıdan gelen mesajı al
        var user_message = $('#userMessage').val();

        // Kullanıcının mesajını chat geçmişine ekle
        chat_history.push({
            'role': 'user',
            'content': user_message
        });

        // OpenAI API'sine gönderilecek veriyi oluştur
        var data = {
            "model": "gpt-4-turbo", //buraya 4
            "messages": [{
                "role": "system",
                "content": "you are a good assitant"
            },
            {
                "role": "user",
                "content": user_message
            }
            ]
        };

        // Fetch API kullanarak veriyi sunucuya gönderin
        fetch('https://api.openai.com/v1/chat/completions', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer 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' // API anahtarınızı buraya ekleyin
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(response_data => {
                // Asistanın mesajını al
                var assistant_message = response_data.choices[0].message.content;

                // Asistanın mesajını chat geçmişine ekle
                chat_history.push({
                    'role': 'assistant',
                    'content': assistant_message
                });

                // Chat geçmişini göster
                showChatHistory();

                // Chat geçmişini sunucuya kaydetmek için bir AJAX isteği de yapılabilir
                // Ancak bu adımı sunucu tarafındaki işleyiciye bağlı olarak ayarlayabilirsiniz
            })
            .catch(error => console.error('Hata:', error));

        // Formu temizle
        $('#userMessage').val('');
    });
});
