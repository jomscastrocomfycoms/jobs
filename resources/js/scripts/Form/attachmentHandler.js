export default {
  methods : {
      onUpdateResumeFile(files) {
          this.form.attachment_resume = (files.length === 0) ? null : files
          if (files.length !== 0) {
              this.form.attachment_resume = files
              this.resumeAttachment.name = this.form.attachment_resume[0].file.name
              this.resumeAttachment.mimeType = this.form.attachment_resume[0].file.type
              this.resumeAttachment.url = URL.createObjectURL(this.form.attachment_resume[0].file)
              this.resumeAttachment.size = this.form.attachment_resume[0].file.size
          }
          else
          {
            console.log('Resume Attachment Empty');
          }
        },

        onUpdateFrontImage(files) {
          this.form.attachment_front_image = (files.length === 0) ? null : files
          if (files.length !== 0) {
              this.form.attachment_front_image = files
              this.frontImageAttachment.name = this.form.attachment_front_image[0].file.name
              this.frontImageAttachment.mimeType = this.form.attachment_front_image[0].file.type
              this.frontImageAttachment.url = URL.createObjectURL(this.form.attachment_front_image[0].file)
              this.frontImageAttachment.size = this.form.attachment_front_image[0].file.size

          }
          else
          {
            console.log('Front Image Attachment Empty');
          }
        },

        onUpdateBackImage(files) {
          this.form.attachment_back_image = (files.length === 0) ? null : files
          if (files.length !== 0) {
              this.form.attachment_back_image = files
              this.backImageAttachment.name = this.form.attachment_back_image[0].file.name
              this.backImageAttachment.mimeType = this.form.attachment_back_image[0].file.type
              this.backImageAttachment.url = URL.createObjectURL(this.form.attachment_back_image[0].file)
              this.backImageAttachment.size = this.form.attachment_back_image[0].file.size
          }
          else
          {
            console.log('Back Image Attachment Empty');
          }
        },

        onUpdateSelfieImage(files) {
          this.form.attachment_selfie_image = (files.length === 0) ? null : files
          if (files.length !== 0) {
              this.form.attachment_selfie_image = files
              this.selfieImageAttachment.name = this.form.attachment_selfie_image[0].file.name
              this.selfieImageAttachment.mimeType = this.form.attachment_selfie_image[0].file.type
              this.selfieImageAttachment.url = URL.createObjectURL(this.form.attachment_selfie_image[0].file)
              this.selfieImageAttachment.size = this.form.attachment_selfie_image[0].file.size
          }
          else
          {
            console.log('Selfie Image Attachment Empty');
          }
        },


        getResumeFile() {
            let resumeFiles = []
            if (this.form.attachment_resume.length > 1) {
                this.form.attachment_resume.map(function (fileItem) {
                    resumeFiles.push(fileItem.file)
                })
                  return resumeFiles
            } else {
                 return this.form.attachment_resume[0].file
            }
        },

        getFrontImageFile() {
            let frontImageFile = []
            if (this.form.attachment_front_image.length > 1) {
                this.form.attachment_front_image.map(function (fileItem) {
                    frontImageFile.push(fileItem.file)
                })
                  return frontImageFile
            } else {
                 return this.form.attachment_front_image[0].file
            }
        },

        getBackImageFile() {
            let backImageFile = []
            if (this.form.attachment_back_image.length > 1) {
                this.form.attachment_back_image.map(function (fileItem) {
                    backImageFile.push(fileItem.file)
                })
                  return backImageFile
            } else {
                 return this.form.attachment_back_image[0].file
            }
        },

        getSelfieImageFile() {
            let selfieImageFile = []
            if (this.form.attachment_selfie_image.length > 1) {
                this.form.attachment_selfie_image.map(function (fileItem) {
                    selfieImageFile.push(fileItem.file)
                })
                  return selfieImageFile
            } else {
                 return this.form.attachment_selfie_image[0].file
            }
        },

  }
}
        