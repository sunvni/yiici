pipeline {
     agent {
        node {
            label 'yiici'
            customWorkspace '/home/sunvni/workspace'
        }
    }
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                dir("yiici/") {
                    sh "sudo docker-compose build"
                    sh "sudo docker-compose up -d"
                }
            }
        }
        stage('Test') {
            steps {
                sh "docker-compose exec composer run-script test"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
