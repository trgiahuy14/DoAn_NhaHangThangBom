const form = document.getElementById('form');

form.addEventListener('submit', function handleSubmit(event) {
  event.preventDefault();
  const xuatra = document.getElementById('output')
  xuatra.innerHTML = 'Đặt bàn thành công!' + '<br/>' + 'Nhà hàng Thằng Bờm xin cảm ơn quý khách! '
  // 👇️ Send data to server here
    
  // 👇️ Reset form here
  form.reset();
});