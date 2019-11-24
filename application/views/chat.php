<html>

<head>
	<?php $this->load->view('sijon/head') ?>
	<link rel="stylesheet" href="<?php echo base_url('css/chat.css') ?>">
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<nav id="header-navbar" class="navbar navbar-expand-lg py-4" style="background-color: blue;">
		<?php $this->load->view("sijon/header.php") ?>
	</nav>

	<div id="side-nav" class="sidenav">
		<?php $this->load->view("sijon/sidenav.php") ?>
	</div>

	<div id="side-search" class="sidenav">
		<?php $this->load->view("sijon/sidesearch.php") ?>
	</div>

	<div class="container" style="margin-top: 150px; margin-bottom: 0px;">
		<div class="messaging">
			<div class="inbox_msg">
				<div class="inbox_people">
					<div class="headind_srch">
						<div class="recent_heading">
							<h4>List Contact</h4>
						</div>
					</div>
					<div class="inbox_chat">
                        <?php if ($this->session->userdata('status') == 'user') { ?>
                        <?php foreach($contact as $c) { ?>
                        <div class="chat_list <?php if (isset($_GET['with']) && $_GET['with'] == $c->username) { ?> active_chat <?php } ?>" id="<?php echo $c->username ?>"
                            onclick="pilihKontak(this)">
							<div class="chat_people">
								<div class="chat_img"> <img src="<?php echo base_url('upload/user/'.$c->Image) ?>"
										alt=""> </div>
								<div class="chat_ib">
									<h5><?php echo $c->nama_lengkap ?></h5>
									<p>Admin</p>
								</div>
                            </div>
                        </div>
                        <?php } } else { ?>
                        <?php foreach($user as $u) { ?>
                        <div class="chat_list <?php if (isset($_GET['with']) && $_GET['with'] == $u->username) { ?> active_chat <?php } ?>" id="<?php echo $u->username ?>"
                            onclick="pilihKontak(this)">
							<div class="chat_people">
								<div class="chat_img"> <img src="<?php echo base_url('upload/user/'.$u->Image) ?>"
										alt=""> </div>
								<div class="chat_ib">
									<h5><?php echo $u->nama_lengkap ?></h5>
									<p>User</p>
								</div>
                            </div>
                        </div>
                        <?php } } ?>
					</div>
				</div>
				<div class="mesgs">
					<?php if (!empty($_GET['with'])) { ?>
					<div class="msg_history">
						<?php foreach($chat as $c) { ?>
						<?php if ($c->username != $this->session->userdata('username')) { ?>
						<div class="incoming_msg">
							<div class="incoming_msg_img"> <img src="<?php echo base_url('upload/user/'.$penerima[0]->Image) ?>"
									alt="" class="round-image"> </div>
							<div class="received_msg">
								<div class="received_withd_msg">
									<p><?php echo $c->message ?></p>
									<span class="time_date"> <?php echo $c->date ?></span>
								</div>
							</div>
						</div>
						<?php } else { ?>
						<div class="outgoing_msg">
                            <div class="outcoming_msg_img"> <img src="<?php echo base_url('upload/user/'.$pengirim[0]->Image) ?>"
									alt="sunil" class="round-image">
						    </div>
							<div class="sent_msg">
								<p><?php echo $c->message ?></p>
								<span class="time_date"> <?php echo $c->date ?></span>
							</div>
                        </div>
						<?php } } ?>
					</div>
					<div class="type_msg">
						<form action="<?php echo site_url('chat/add/?with='.$_GET['with']) ?>" method="post">
							<div class="input_msg_write">
								<textarea name="message" id="message" style="display: block; width: 95%;" class="write_msg" placeholder="Type a message"
									required></textarea>
								<button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane"
										aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<footer class="mastfoot my-3">
		<?php $this->load->view("sijon/footer.php") ?>
	</footer>

	<?php $this->load->view('sijon/js') ?>
	<script>
        function pilihKontak(id) {
            location.href = "?with=" + $(id).attr("id");
        }
        $('#message').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + "px; overflow-y: hidden; width: 95%;");
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + "px";
        });
        $('.msg_history').scrollTop($('.msg_history')[0].scrollHeight);
	</script>
</body>

</html>
