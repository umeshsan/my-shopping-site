</div>
<!-- smooth-content -->
</div>
<!-- smooth-wrapper -->

<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/swiper-bundle.min.js"></script>
<script src="dist/js/fancybox.min.js"></script>
<script src="dist/js/aos.min.js"></script>
<script src="dist/js/jquery.matchHeight-min.js"></script>

<!-- GSAP core -->
<script src="dist/js/gsap.min.js"></script>

<!-- ScrollTrigger (required by ScrollSmoother) -->
<script src="dist/js/ScrollTrigger.min.js"></script>

<!-- ScrollSmoother plugin -->
<script src="dist/js/ScrollSmoother.min.js"></script>

<!-- Scrollreveal plugin -->
<script src="dist/js/scrollreveal.min.js"></script>

<!-- Custom -->
<script src="dist/js/custom.js"></script>

<script>
	function toggleDiv() {
		const box = document.getElementById("toggleBox");
		box.style.display = box.style.display === "none" ? "block" : "none";
	}
</script>

<script>
	class ImageUploader {
		constructor(wrapper) {
			this.wrapper = wrapper;
			this.contextWrapper = wrapper.closest('.image-search-context-wrapper');
			this.input = wrapper.querySelector('input[type="file"]');
			this.preview = wrapper.querySelector('.image-preview');
			this.button = wrapper.querySelector('.upload-btn');
			this.closeBtn = wrapper.querySelector('.image-upload-close');

			this.init();
		}

		init() {
	// Click upload button
			this.button.addEventListener('click', () => this.input.click());

	// File select
			this.input.addEventListener('change', () => {
				if (this.input.files[0]) {
					this.showImage(this.input.files[0]);
				}
			});

	// Drag & drop
			this.wrapper.addEventListener('dragover', e => {
				e.preventDefault();
				this.wrapper.classList.add('dragover');
			});

			this.wrapper.addEventListener('dragleave', () => {
				this.wrapper.classList.remove('dragover');
			});

			this.wrapper.addEventListener('drop', e => {
				e.preventDefault();
				this.wrapper.classList.remove('dragover');

				const file = e.dataTransfer.files[0];
				if (file && file.type.startsWith('image')) {
					this.showImage(file);
				}
			});

	// Paste image
			document.addEventListener('paste', e => {
				const item = [...e.clipboardData.items].find(i =>
					i.type.startsWith('image')
					);
				if (item) {
					this.showImage(item.getAsFile());
				}
			});

	// Close button removes active class
			this.closeBtn.addEventListener('click', () => {
				if (this.contextWrapper) {
					this.contextWrapper.classList.remove(
						'image-search-context-wrapper-active'
						);
				}
	  // Optionally close the dropdown as well
				const toggleBox = document.getElementById('toggleBox');
				if (toggleBox) toggleBox.style.display = 'none';
			});
		}

		showImage(file) {
			const img = document.createElement('img');
			img.src = URL.createObjectURL(file);

			this.preview.innerHTML = '';
			this.preview.appendChild(img);
		}
	}

// ====== INIT IMAGE UPLOADER ======
	document.addEventListener('DOMContentLoaded', () => {
		const uploader = document.getElementById('imageUpload');
		if (uploader) {
			new ImageUploader(uploader);
		}
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', () => {

		const sr = ScrollReveal({
			distance: '40px',
			duration: 600,
			easing: 'ease-out',
			origin: 'bottom',
			reset: false
		});

	// reveal items in initially active tab
		sr.reveal('.product-list-wrap .col', { interval: 100 });

	// reveal items when tab is shown
		document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tabEl => {
			tabEl.addEventListener('shown.bs.tab', e => {
				const targetPane = document.querySelector(e.target.dataset.bsTarget);
				sr.reveal(targetPane.querySelectorAll('.product-list-wrap .col'), {
					interval: 100
				});
			});
		});

	});
</script>

<script>
	const chatFab = document.getElementById('chatFab');
	const chatWidget = document.getElementById('chatWidget');
	const chatBody = document.getElementById('chatBody');
	const chatInput = document.getElementById('chatInput');
	const sendBtn = document.getElementById('sendBtn');

// Toggle chat window
	chatFab.addEventListener('click', (e) => { e.stopPropagation(); chatWidget.classList.toggle('active'); });
	chatWidget.addEventListener('click', (e) => e.stopPropagation());
	document.addEventListener('click', () => chatWidget.classList.remove('active'));

// Send message function
	function sendMessage() {
		const msg = chatInput.value.trim();
		if (!msg) return;

  // Show user message
		chatBody.innerHTML += `<p class="user-msg">You: ${msg}</p>`;
		chatInput.value = '';
		chatBody.scrollTop = chatBody.scrollHeight;

  // Fake bot reply after 1 second
		setTimeout(() => {
			const botReply = fakeBotResponse(msg);
			chatBody.innerHTML += `<p class="bot-msg">Bot: ${botReply}</p>`;
			chatBody.scrollTop = chatBody.scrollHeight;
		}, 1000);
	}

// Simple fake bot logic
	function fakeBotResponse(userMsg) {
		const responses = [
			"Hello! How can I help you today?",
			"Please wait a moment, checking that for you...",
			"Thank you for your message!",
			"I’m here to assist you with your order.",
			"Can you please provide more details?"
		];
  // Random response
		return responses[Math.floor(Math.random() * responses.length)];
	}

// Event listeners
	sendBtn.addEventListener('click', sendMessage);
	chatInput.addEventListener('keypress', (e) => { if(e.key === 'Enter') sendMessage(); });
</script>


<script>
	const cartFab = document.getElementById('cartFab');
	const cartSidebar = document.getElementById('cartSidebar');
	const cartItems = document.getElementById('cartItems');
	const cartSubtotal = document.getElementById('cartSubtotal');
	const cartHeader = document.getElementById('cartHeader');

// Open / Close Sidebar
	cartFab.addEventListener('click', () => cartSidebar.classList.add('active'));
	document.getElementById('closeCart').addEventListener('click', () => cartSidebar.classList.remove('active'));

// Quantity Change
	function changeItemQty(btn, delta) {
		const input = btn.parentElement.querySelector('input');
		let val = parseInt(input.value) + delta;
		if (val < 1) val = 1;
		input.value = val;
		updateCart();
	}

// Remove Item
	function removeItem(btn) {
		btn.closest('.cart-item').remove();
		updateCart();
	}

// Update Subtotal and Header
	function updateCart() {
		let subtotal = 0;
		const items = cartItems.querySelectorAll('.cart-item');
		items.forEach(item => {
			const price = parseInt(item.querySelector('.item-price').innerText.replace(/[^\d]/g,''));
			const qty = parseInt(item.querySelector('input').value);
			subtotal += price * qty;
		});
		cartSubtotal.innerText = subtotal;
		cartHeader.innerText = `Your cart (${items.length} items)`;
	}

  // Select all checkboxes
	function toggleSelectAll(cb){
		const checkboxes = document.querySelectorAll('.item-checkbox');
		checkboxes.forEach(chk => chk.checked = cb.checked);
	}

// Delete selected items
	function deleteSelected(){
		const checkboxes = document.querySelectorAll('.item-checkbox:checked');
		checkboxes.forEach(cb => cb.closest('tr').remove());
		updateCart();
	}

// Voucher apply
	function applyVoucher(){
		const code = document.getElementById('voucherCode').value.trim();
		let discount = 0;
  if(code === "SAVE100") discount = 100; // example voucher
  document.getElementById('voucherCode').dataset.value = discount;
  updateCart();
}

// Initial update
updateCart();
</script>


</body>

</html>
