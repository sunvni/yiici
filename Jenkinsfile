pipeline {
     agent {
        node {
            label 'yiici'
            customWorkspace '/root/workspace'
        }
    }
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
