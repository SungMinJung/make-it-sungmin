<template>
    <div class="profile-form">
        <img :src="main_image" alt="프로필 이미지" class="profile_img" style="max-height: 125px;">
        <div class="upload-buttons" style="display: inline-block; height: 125px; margin-left: 30px;">
            <button type="button" @click="imageUpload" style="width: 100px;" class="btn btn-primary">업로드 </button><br>
            <button type="button" @click="imageDrop" style="width: 100px; margin-top: 10px;" class="btn btn-primary">삭제 </button>
        </div>
        <input type="hidden" name="image" :value="main_image">
        <input type="file" ref="fileInput" style="display:none;" @change="onImageChange" />
    </div>
</template>

<script>
export default {
    props: ['src'],
    data() {
        return {
            main_image: '',
        }
    },
    mounted() {
        if(this.src) {
            this.main_image = this.src
        }
    },
    methods: {
        imageUpload(e) {
            this.$refs.fileInput.click()
        },
        imageDrop() {
            // TODO: 이미지 Drop 이후, 같은 이미지 등록시 감지 못함
            this.main_image = '';
        },
        uploadFile: function(files) {
            let formData = new FormData()
            formData.append(`file`, files[0])
            axios.post('/api/file', formData, { headers: { 'Content-Type': 'multipart/form-data' }})
            .then(res => {
                this.main_image = res.data.real_path
            })
        },
        onImageChange: function(e) {
            this.uploadFile(this.$refs.fileInput.files)
        }
    }
}
</script>
