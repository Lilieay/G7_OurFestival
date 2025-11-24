function validateForm() {
            let emailInput = document.getElementById("email");
            let emailValue = emailInput.value;
            if (emailValue.indexOf('.') === -1) {
                alert("รูปแบบอีเมลไม่ถูกต้อง! ต้องมีจุด (.) เช่น .com หรือ .co.th");
                emailInput.focus(); 
                return false; 
            }
            let parts = emailValue.split('.'); 
            let lastPart = parts[parts.length - 1]; 
            
            if (lastPart.length < 2) {
                alert("นามสกุลโดเมนสั้นเกินไป (ต้องมีอย่างน้อย 2 ตัวอักษร เช่น .com)");
                emailInput.focus();
                return false;
            }
            return true;
        }