<?= $this->extend('auth/layout/index')?>
<?= $this->section('content')?>
<div class="row">
      <div class="col s12">
        <div class="container">
          <div id="register-page" class="row">
          <?= view('Myth\Auth\Views\_message_block') ?>
            <div
              class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8"
            >
            <form class="login-form mb-8" action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
                <div class="row">
                  <div class="input-field col s12">
                    <h5 class="ml-4"><?=lang('Auth.register')?></h5>
                    <p class="ml-4">Silahkan mendaftar di ponpes Sunan Pandanaran !</p>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="username" type="text" name="email" value="<?= old('username') ?>"/>
                    <label for="username" class="center-align"><?=lang('Auth.username')?></label>
                  </div>
                  
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">mail_outline</i>
                    <input id="email" type="email" name="email" value="<?= old('email') ?>"/>
                    <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    <label for="email"><?=lang('Auth.email')?></label>
                    
                  </div>
                 
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password" type="password" name="password" autocomplete="off"/>
                    <label for="password"><?=lang('Auth.password')?></label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password-again" name="pass_confirm" type="password" autocomplete="off"/>
                    <label for="password-again"><?=lang('Auth.repeatPassword')?></label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button
                      type="submit"
                      class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"
                      ><?=lang('Auth.register')?></
                    >
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <p class="margin medium-small">
                      <a href="<?= url_to('login') ?>"
                        ><?=lang('Auth.alreadyRegistered')?> <?=lang('Auth.signIn')?></a
                      >
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
<?= $this->endSection()?>
