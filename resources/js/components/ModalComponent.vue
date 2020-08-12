<template>
<transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
            Vue Js Modal
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              <div class="col-md-12">
                  <input type="text" name="anc" id="abc" placeholder="enter" class="form-control">
              </div>
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="modal-default-button" @click="$emit('close')">
                OK
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>
<script>
  export default {

  }
</script>