pipeline {
     agent {
        node {
            label 'yiici'
        }
    }
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                sh "pwd"
                sh "sudo docker-compose build"
                sh "sudo docker-compose up -d"
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
